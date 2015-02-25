Public Class Facture

#Region "Evenement Click & Load "

  Private Sub W_Facture_Loaded(sender As Object, e As RoutedEventArgs) Handles W_Facture.Loaded
    Me.WindowState = Windows.WindowState.Maximized

  End Sub

  Private Sub Bt_AjouterFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_AjouterFacture.Click

  End Sub

  Private Sub Bt_ModifierFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ModifierFacture.Click

  End Sub

  Private Sub Bt_SupprimerFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_SupprimerFacture.Click
    'commantaire

  End Sub

  Private Sub Bt_FactureRetour_Click(sender As Object, e As RoutedEventArgs) Handles Bt_FactureRetour.Click
    Dim accueil As New Accueil
    accueil.Show()
    Me.Close()
  End Sub

#End Region

End Class
