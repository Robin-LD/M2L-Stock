Imports System.Data.SqlClient
Imports MySql.Data.MySqlClient
Public Class accountgestion

    Dim MySqlConn As MySqlConnection


    Private Sub Button_Click(sender As Object, e As RoutedEventArgs)
        MySqlConn = New MySqlConnection
        MySqlConn.ConnectionString = "data source=localhost;user id=root;  password='';database=m2l-stock2"

        Try
            MySqlConn.Open()
            MessageBox.Show("La connexion est réussie")
            MySqlConn.Close()

        Catch ex As MySqlException
            MessageBox.Show("La connexion au MySQL n'a pas été établie")
        Finally
            MySqlConn.Dispose()

        End Try

    End Sub
End Class