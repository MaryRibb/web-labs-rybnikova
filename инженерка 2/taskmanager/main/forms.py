from django import forms
from .models import Booking
from django.forms import ModelForm, TextInput


class HousesFilterForm(forms.Form):
    min_price = forms.IntegerField(label="от", required=False)
    max_price = forms.IntegerField(label="до", required=False)


class TaskForm(ModelForm):
    class Meta:
        model = Booking
        fields = ["dateofbooking", "timeofbooking", "typebooking", "numberbooking", "accountnumber", "idclient"]
        widgets = {
             "dateofbooking": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'dateofbooking'
              }),
             "timeofbooking": TextInput(attrs={
                 'class': 'form-control',
                 'placeholder': 'timeofbooking'
              }),
             "typebooking": TextInput(attrs={
                 'class': 'form-control',
                 'placeholder': 'typebooking'
              }),
             "numberbooking": TextInput(attrs={
                  'class': 'form-control',
                  'placeholder': 'numberbooking'
              }),
             "accountnumber": TextInput(attrs={
                  'class': 'form-control',
                  'placeholder': 'accountnumber'
              }),
             "idclient": TextInput(attrs={
                  'class': 'form-control',
                  'placeholder': 'idclient'
                 }),
        }

