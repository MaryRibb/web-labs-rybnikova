from .models import Booking
from django.forms import ModelForm, TextInput


class TaskForm(ModelForm):
    class Meta:
        model = Booking
        fields = ["dateofbooking", "timeofbooking", "typebooking", "numberbooking", "accountnumber", "idclient"]
        widgets = {
            "typebooking": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'typebooking'
            }),
            "dateofbooking": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'dateofbooking'
            }),
            "timeofbooking": TextInput(attrs={
                'class': 'form-control',
                'placeholder': 'timeofbooking'
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