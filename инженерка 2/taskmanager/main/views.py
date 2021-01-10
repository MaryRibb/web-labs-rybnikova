from django.shortcuts import render
from django.http import HttpResponse

# Create your views here.
from .models import Booking


def index(request):

    booking = Booking.objects.all()

    return render(request, 'main/index.html', {'title': 'Главная страница сайта', 'booking': booking})


def about(request):

    return render(request, 'main/about.html')