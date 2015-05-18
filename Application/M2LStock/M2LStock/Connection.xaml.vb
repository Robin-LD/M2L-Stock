Imports System.Data.SqlClient
Imports MySql.Data.MySqlClient
Class Connexion

    Dim MySqlConnection As MySqlConnection
    Dim MySqlConn As MySqlConnection


    Private Sub Ok_Click(sender As Object, e As RoutedEventArgs) Handles Ok.Click
        MySqlConnection = New MySqlConnection
        MySqlConnection.ConnectionString = "data source=localhost;user id=root;  password='';database=m2l-stock2" 'Connexion au serveur et à la base de donnée
        MySqlConnection.Open()

        Dim Myadapter As New MySqlDataAdapter
        Dim sqlquary = "SELECT * From employee WHERE Username='" & Username.Text & "'AND Password='" & Password.Password & "';" 'SELECT des utilisateur(ici ADMIN) dans la table Users
        Dim command As New MySqlCommand
        command.Connection = MySqlConnection
        command.CommandText = sqlquary
        Myadapter.SelectCommand = command

        Dim Mydata As MySqlDataReader
        Mydata = command.ExecuteReader
        If CInt(Mydata.HasRows) = 0 Then
            MsgBox("Erreur, mauvais login !") 'Erreur, les donnée entrer ne sont pas correct.
        Else
            Dim fenetre2 As New MainWindow
            fenetre2.Show() 'Ouverture de la deuxième form(deuxièmeWindow.xaml) donc à modifier
            Me.Close() 'Fermeture de la première fenêtre
        End If
    End Sub

    Private Sub Cancel_Click(sender As Object, e As RoutedEventArgs) Handles Cancel.Click
        Me.Close() 'Fermeture du logiciel
    End Sub

    Private Sub Button_Click(sender As Object, e As RoutedEventArgs)
        MySqlConn = New MySqlConnection
        MySqlConn.ConnectionString = "data source=localhost;user id=root;  password='';database=m2l-stock2"

        Try
            MySqlConn.Open() 'Vérification de la connexion entre la base de donnée et le logiciel
            MessageBox.Show("La connexion est réussie")
            MySqlConn.Close()

        Catch ex As MySqlException
            MessageBox.Show("La connexion au MySQL n'a pas été établie") 'Message d'erreur connexion non réussie
        Finally
            MySqlConn.Dispose()

        End Try
    End Sub
End Class