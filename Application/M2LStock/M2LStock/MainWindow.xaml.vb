Class MainWindow 

  Private Sub Bt_Facture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_Facture.Click
    Dim facture As New Facture
    facture.Show()
    Me.Close()

  End Sub
End Class
