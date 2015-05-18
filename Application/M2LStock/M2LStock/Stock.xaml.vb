Imports MySql.Data
Imports MySql.Data.Entity
Imports MySql.Data.MySqlClient
Imports MySql.Data.Types
Imports System.Data.SqlClient
Imports System.Data

Public Class Stock

    Public Function Connexion() As MySqlConnection
        Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
            '  Return conn
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try

    End Function
    Public Sub toutAfficher()
        Dim seConnecter As String = "Server =localhost; Database=m2l-stock2;Uid=root;Pwd=;"
        Dim conn As MySqlConnection = New MySqlConnection
        Try
            conn.ConnectionString = seConnecter
            conn.Open()
            '  Return conn
        Catch ex As Exception
            MsgBox("Impossible de se connecter à la base de données")
        End Try
        Dim requete As String = "select * from stock"
        Dim commande As New MySqlCommand(requete, conn)
        Dim Adaptateur As New MySqlDataAdapter(commande)
        Dim MonDataSet As DataSet = New DataSet
        DataG_Stock.AutoGenerateColumns = True
        Adaptateur.Fill(MonDataSet, "stock")

        DataG_Stock.ItemsSource = CType(MonDataSet.Tables("stock").DefaultView, IEnumerable)
    End Sub

    Private Sub W_Stock_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Stock.Loaded
        Me.WindowState = Windows.WindowState.Maximized
        Connexion()
        toutAfficher()
    End Sub
End Class
