Imports MySql.Data
Imports MySql.Data.Entity
Imports MySql.Data.MySqlClient
Imports MySql.Data.Types
Imports System.Data.SqlClient
Imports System.Data
Imports System.DateTime

Public Class Commande

    Public MonDataSet As DataSet = New DataSet
    Public maVariable As String
    Public maVariable2 As String
    Public maVariable3 As String

    Public Function Connexion() As Boolean
        Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
            Return True
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
            Return False
        End Try

    End Function

    Public Sub toutAfficher()
        'Méthode de connexion + 
        Dim seConnecter As String = "Server=localhost; Database=m2l-stock2; Uid=root; Pwd=; Allow Zero Datetime=true"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try

        'Requete sql
        Dim requete As String = "select id,  user_id, DATE_FORMAT(`date`, '%Y-%m-%d') AS `date`, status  from `order`"
        Dim commande As New MySqlCommand(requete, conn)

        Dim Adaptateur As New MySqlDataAdapter(commande)
        ' commande.Parameters.AddWithValue("date", DateFormat.ShortDate)
        DataG_Commande.AutoGenerateColumns = True


        'Adapter résultat dans DataG_Facture

        Adaptateur.Fill(MonDataSet, "`order`")
        DataG_Commande.ItemsSource = CType(MonDataSet.Tables("`order`").DefaultView, IEnumerable)
        conn.Close()
    End Sub

    Public Sub detailCommande()
        Dim seConnecter As String = "Server=localhost; Database=m2l-stock2; Uid=root; Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try
        Dim requete As String = "SELECT  o.id,  o.status, stock.nom as 'Nom du produit', orderlist.amount as 'Quantite', orderlist.price as 'Prix unitaire'FROM `order` o Join orderlist orderlist On  `orderlist`.order_id = o.id Join stock On stock.id = orderlist.stock_id Where orderlist.price is not null And user_id =" & maVariable & " And date ='" & maVariable2 & "'"
        Dim commande As New MySqlCommand(requete, conn)
        Dim Adaptateur As New MySqlDataAdapter(commande)

        DataG_Commande2.AutoGenerateColumns = True

        'Adapter résultat dans DataG_Facture
        Adaptateur.Fill(MonDataSet, "`order`, orderlist, stock")
        DataG_Commande2.ItemsSource = CType(MonDataSet.Tables("`order`, orderlist, stock").DefaultView, IEnumerable)
        conn.Close()
    End Sub

    Private Sub W_Commande_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Commande.Loaded
        Me.WindowState = Windows.WindowState.Maximized

        Connexion()

        If Connexion() Then
            toutAfficher()
            Dim compteLesColumns As Integer
            compteLesColumns = DataG_Commande.Columns.Count
            For i As Integer = 0 To compteLesColumns - 1
                DataG_Commande.Columns(i).MinWidth = DataG_Commande.ActualWidth / compteLesColumns
            Next
        End If

      
        '  If DataG_Commande.SelectedIndex > -1 Then
        'detailCommande()

        '   End If
    End Sub

    Private Sub Bt_Selectionner_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Selectionner.Click
        maVariable = MonDataSet.Tables.Item(0).Rows.Item(DataG_Commande.SelectedIndex).Item(1).ToString
        maVariable2 = MonDataSet.Tables.Item(0).Rows.Item(DataG_Commande.SelectedIndex).Item(2).ToString
        maVariable3 = MonDataSet.Tables.Item(0).Rows.Item(DataG_Commande.SelectedIndex).Item(0).ToString
        detailCommande()
    End Sub

    Private Sub Bt_Retour_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Retour.Click
        Dim accueil As New Accueil
        accueil.Show()
        Me.Close()
    End Sub

    Private Sub Bt_Validation_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Validation.Click
        Dim seConnecter As String = "Server=localhost; Database=m2l-stock2; Uid=root; Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try
        Dim requete As String = "UPDATE `order`SET status =""" & "2" & """ WHERE date='" & maVariable2 & "' AND user_id='" & maVariable & "' AND id='" & maVariable3 & "'"
        Dim commande As New MySqlCommand(requete, conn)
        Dim dataReader As MySqlDataReader
        Dim Adapteur As New MySqlDataAdapter
        dataReader = commande.ExecuteReader
        Try
            dataReader.Read()
            commande.ExecuteNonQuery()
            MsgBox("Commande validée")

            dataReader.Close()
            conn.Close()

        Catch ex As Exception
            ' MsgBox("Une erreur est survenue")
        End Try
    End Sub
End Class
