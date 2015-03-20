Imports MySql.Data.Entity
Imports MySql.Data.MySqlClient
Imports MySql.Data.Types
Imports System.Data.DataColumn
Imports System.Media


Public Class Facture

#Region "Evenement Click & Load "

    Private Sub W_Facture_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Facture.Loaded
        Me.WindowState = Windows.WindowState.Maximized
        Dim connection As String = "Server=localhost;Database=m2l-interne;Uid=root;Pwd="
        ' Dim conn As New MySqlConnection

        'Try
        '    conn.ConnectionString = connection
        '    conn.Open()
        'Catch ex As Exception
        '    MsgBox("Impossible de se connecter à la base", vbOKOnly)
        'End Try
        

        'Ajoute 5 colonnes

        For i = 0 To 4
            Dim column As New DataGridTextColumn
            column.Header = "Numéro produit " + i.ToString
            DataG_Facture.Columns.Add(column)
            column.Width = DataG_Facture.ActualWidth / 5

        Next i


    End Sub

    Private Sub Bt_AjouterFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_AjouterFacture.Click
        Dim mastring As String = "azerty"

        'Ajoute 6 lignes
        'For i = 0 To 5
        Dim row As New RowDefinition
        DataG_Facture.Items.Add(row)
        ' Next i


        'DataG_Facture.RowBackground = ColorConver(Colors.Blue)




    End Sub

    Private Sub Bt_ModifierFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ModifierFacture.Click

    End Sub

    Private Sub Bt_SupprimerFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_SupprimerFacture.Click
        'commantaire
        'Un autre commentaire

    End Sub

    Private Sub Bt_FactureRetour_Click(sender As Object, e As RoutedEventArgs) Handles Bt_FactureRetour.Click
        Dim accueil As New Accueil
        accueil.Show()
        Me.Close()
    End Sub

#End Region

End Class
