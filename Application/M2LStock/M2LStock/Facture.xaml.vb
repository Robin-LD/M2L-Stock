Imports MySql.Data
Imports MySql.Data.Entity
Imports MySql.Data.MySqlClient
Imports MySql.Data.Types
Imports System.Data.SqlClient
Imports System.Data
Imports System.DateTime

Public Class Facture

    Public maVariable As String
    Public maVariable2 As String
    Public maVariable3 As String
    Public MonDataSet As DataSet = New DataSet

#Region "Evenement Click & Load "


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
        Dim seConnecter As String = "Server=localhost; Database=m2l-stock2; Uid=root; Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try

        'Requete sql
        Dim requete As String = "select * from facture"
        Dim commande As New MySqlCommand(requete, conn)
        Dim Adaptateur As New MySqlDataAdapter(commande)

        DataG_Facture.AutoGenerateColumns = True

        'Adapter résultat dans DataG_Facture
        Adaptateur.Fill(MonDataSet, "facture")
        DataG_Facture.ItemsSource = CType(MonDataSet.Tables("facture").DefaultView, IEnumerable)
        conn.Close()
    End Sub
    Private Sub W_Facture_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Facture.Loaded


        Me.WindowState = Windows.WindowState.Maximized
        Connexion()
        If Connexion() = True Then
            toutAfficher()

            'Colonnes uniformes
            Dim compteLesColumns As Integer
            compteLesColumns = DataG_Facture.Columns.Count
            For i As Integer = 0 To compteLesColumns - 1
                DataG_Facture.Columns(i).MinWidth = DataG_Facture.ActualWidth / compteLesColumns
            Next

            'selection de ligne unique.
            DataG_Facture.SelectionMode = DataGridSelectionMode.Single

        Else
            MsgBox("L'application va se fermer.", vbOKOnly)

        End If

    End Sub

    Private Sub Bt_FactureRetour_Click(sender As Object, e As RoutedEventArgs) Handles Bt_FactureRetour.Click
        Dim accueil As New Accueil
        accueil.Show()
        Me.Close()
    End Sub

#End Region

    Private Sub Bt_ImprimerFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ImprimerFacture.Click
        maVariable = MonDataSet.Tables.Item(0).Rows.Item(DataG_Facture.SelectedIndex).Item(0).ToString
        maVariable2 = MonDataSet.Tables.Item(0).Rows.Item(DataG_Facture.SelectedIndex).Item(1).ToString
        maVariable3 = MonDataSet.Tables.Item(0).Rows.Item(DataG_Facture.SelectedIndex).Item(2).ToString


        Dim imprimerFacture As New ImprimerFacture

        imprimerFacture.maVariableTransfere = maVariable
        imprimerFacture.maVariableTransfere2 = maVariable2
        imprimerFacture.maVariableTransfere3 = maVariable3
        imprimerFacture.Show()

       
    End Sub
End Class





'Public Sub Bt_AjouterFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_AjouterFacture.Click

'    Dim ajouterFacture As New AjouterFacture
'    ajouterFacture.titi = maVariable
'    ajouterFacture.Show()

'End Sub

'Private Sub Bt_ModifierFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ModifierFacture.Click

'    maVariable = MonDataSet.Tables.Item(0).Rows.Item(DataG_Facture.SelectedIndex).Item(0).ToString
'    maVariable2 = MonDataSet.Tables.Item(0).Rows.Item(DataG_Facture.SelectedIndex).Item(1).ToString
'    Dim modifierFacture As New ModifierFacture
'    modifierFacture.maVariableTransfere = maVariable
'    modifierFacture.maVariableTransfere2 = maVariable2
'    modifierFacture.Show()

'End Sub



'Private Sub Bt_SupprimerFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_SupprimerFacture.Click
'    If DataG_Facture.SelectedIndex > -1 Then
'        DataG_Facture.CanUserDeleteRows = True
'        MsgBox("Voulez vous supprimer cette ligne ?", MsgBoxStyle.YesNoCancel)

'        If CBool(MsgBoxResult.Yes) Then
'            Dim seConnecter As String = "Server=localhost; Database=m2l-stock2; Uid=root; Pwd=;"
'            Dim conn As MySqlConnection = New MySqlConnection
'            Try
'                conn.ConnectionString = seConnecter
'                conn.Open()
'            Catch ex As Exception
'                MsgBox("Impossible de se connecter à la base de données")
'            End Try

'            Dim requete As String = ""
'            Dim commande As New MySqlCommand(requete, conn)

'            commande.BeginExecuteNonQuery()
'            MsgBox("okok")
'        End If
'    End If

'End Sub