from django import forms


class FilterForm(forms.Form):
    min_id = forms.CharField(label="от", required=False)
    max_id = forms.CharField(label="до", required=False)
