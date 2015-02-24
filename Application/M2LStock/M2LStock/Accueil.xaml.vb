Public Class Accueil

  Private Sub W_Accueil_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Accueil.Loaded

  End Sub

  Private Sub Bt_Facture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Facture.Click
    Dim facture As New Facture
    facture.Show()
    Me.Hide()
  End Sub

 
End Class
