Class MainWindow


  Private Sub W_Authentification_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Authentification.Loaded

  End Sub


  Private Sub Bt_accueil_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Accueil.Click
    Dim accueil As New Accueil
    accueil.Show()
    Me.Close()

  End Sub

  
End Class
