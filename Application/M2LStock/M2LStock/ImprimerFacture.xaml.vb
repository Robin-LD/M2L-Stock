Imports System.Drawing.Printing
Imports System.Printing.PrintQueue
Imports System.Drawing

Public Class ImprimerFacture

    Public maVariableTransfere As String
    Public maVariableTransfere2 As String
    Public maVariableTransfere3 As String


    Private Sub Window_Loaded(sender As Object, e As RoutedEventArgs)
        Lbl_DateFacture.Content = maVariableTransfere2.ToString
        Lbl_Client.Content = maVariableTransfere.ToString
        Lbl_MontantTotal.Content = maVariableTransfere3.ToString

    End Sub

    Private Sub Bt_ImprimerFacture_Click(sender As Object, e As RoutedEventArgs) Handles Bt_ImprimerFacture.Click
        Dim dialog As New PrintDialog
        Dim dialogResult As System.Nullable(Of Boolean) = dialog.ShowDialog()
        If dialogResult = True Then
            dialog.PrintVisual(Canvas1, "Facture de " & maVariableTransfere & " du " & maVariableTransfere2)
        End If
        Me.Close()
    End Sub
End Class
