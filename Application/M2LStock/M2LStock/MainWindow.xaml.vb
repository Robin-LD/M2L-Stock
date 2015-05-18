Class MainWindow


  Private Sub W_Authentification_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Authentification.Loaded

  End Sub


  Private Sub Bt_accueil_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Accueil.Click
        Dim accueil As New Facture
    accueil.Show()
    Me.Close()

    End Sub

    Private Sub Button_Click(sender As Object, e As RoutedEventArgs)
        Dim accountgestion As New accountgestion()
        accountgestion.Show()
    End Sub
  
    Private Sub Bt_Stock_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Stock.Click
        Dim stock As New Stock
        stock.Show()
        Me.Close()
    End Sub

    Private Sub Bt_Commande_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Commande.Click
        Dim commande As New Commande
        commande.Show()
        Me.Close()
    End Sub
End Class
