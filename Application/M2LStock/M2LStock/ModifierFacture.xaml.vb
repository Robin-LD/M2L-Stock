Imports MySql.Data
Imports MySql.Data.Entity
Imports MySql.Data.MySqlClient
Imports MySql.Data.Types
Imports System.Data.SqlClient
Imports System.Data



Public Class ModifierFacture
    Public maVariableTransfere As String
    Public maVariableTransfere2 As String
    Public Function Connexion() As MySqlConnection
        Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
            '  Return conn
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
            Me.Close()
        End Try

    End Function

    Private Sub Requete()
        Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
            '  Return conn
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
            Me.Close()
        End Try

        Dim requete As String = "select * from facture where Username ='" & maVariableTransfere & "' AND Mois = '" & maVariableTransfere2 & "'"
        Dim commande As New MySqlCommand(requete, conn)
        Dim Adaptateur As New MySqlDataAdapter(commande)
        Dim monDataSet As DataSet = New DataSet

        DataG_ModifFacture.AutoGenerateColumns = True
        Adaptateur.Fill(monDataSet, "facture")

        DataG_ModifFacture.ItemsSource = CType(monDataSet.Tables("facture").DefaultView, IEnumerable)
        conn.Close()

    End Sub

    Private Sub Window_Loaded(sender As Object, e As RoutedEventArgs)
        Connexion()
        Requete()
    End Sub

    Private Sub Bt_ValiderModif_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ValiderModif.Click
        If Txtb_Modif_Client.Text IsNot Nothing And Txtb_ModifMontant.Text IsNot Nothing And Txtb_ModifDate.Text IsNot Nothing Then
            Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
            Dim conn As MySqlConnection = New MySqlConnection
            Try
                conn.ConnectionString = seConnecter
                conn.Open()
                '  Return conn
            Catch ex As Exception
                MsgBox("Impossible de se connecter à la base de données")
                Me.Close()
            End Try
            Dim requete As String = "UPDATE facture SET Username ='" & Txtb_Modif_Client.Text & "', Mois='" & Txtb_ModifMontant.Text & "', Prix ='" & Txtb_ModifDate.Text & "' where Username ='" & maVariableTransfere & "' AND Mois = '" & maVariableTransfere2 & "'"
            Dim commande As New MySqlCommand(requete, conn)
            Try
                commande.BeginExecuteNonQuery()
                MsgBox("okok")
            Catch ex As Exception

            End Try

        End If
        'Me.Close()
    End Sub
End Class
