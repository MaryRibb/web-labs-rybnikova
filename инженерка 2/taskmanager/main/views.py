from django.shortcuts import render,redirect
from django.http import HttpResponse

# Create your views here.
from .models import Booking
from .forms import HousesFilterForm
from .forms import TaskForm

def index(request):

    booking = Booking.objects.all()
    form = HousesFilterForm(request.GET)
    if form.is_valid():
        if form.cleaned_data["min_price"]:
            booking = booking.filter(idclient__gte=form.cleaned_data["min_price"])
        if form.cleaned_data["max_price"]:
            booking = booking.filter(idclient__lte=form.cleaned_data["max_price"])

    return render(request, 'main/index.html', {'title': 'Главная страница сайта', 'booking': booking, "form": form})


def about(request):
    if request.method == "POST":
        form = TaskForm(request.POST)
        if form.is_valid():
            form.save()
            redirect('home')

    form = TaskForm()
    context = {
        'form':form
    }

    return render(request, 'main/about.html',context)