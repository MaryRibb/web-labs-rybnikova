from django.db import models
# Create your models here.
from import_export.admin import ImportExportActionModelAdmin


class Booking(models.Model):
    id = models.AutoField(primary_key=True)
    dateofbooking = models.DateTimeField('date of booking')
    timeofbooking = models.DateTimeField('time of booking')
    typebooking = models.CharField('type booking', max_length=50)
    numberbooking = models.PositiveIntegerField('number booking')
    accountnumber = models.PositiveIntegerField('account number')
    idclient = models.PositiveIntegerField('id client')

    def __str__(self):
        return self.typebooking


class Theclient(models.Model):
    id = models.AutoField(primary_key=True)
    Nameorfullnameoftheindividual = models.CharField('Name or fullname of the individual', max_length=50)
    Thepassportseries = models.CharField('the passport series', max_length=50)
    numberbooking = models.PositiveIntegerField('number booking')
    accountnumber = models.PositiveIntegerField('account number')


class Bookinginvoice(models.Model):
    numberbooking = models.PositiveIntegerField('number booking')
    dateofbooking = models.DateTimeField('date of booking')
    typeofplace = models.CharField('type of place', max_length=50)
    price = models.CharField('type of place', max_length=50)


class Users(models.Model):
    id = models.AutoField(primary_key=True)
    login = models.CharField('login', max_length=50)
    name = models.CharField('name', max_length=50)
    password = models.CharField('password', max_length=50)
    IsAdmin = models.BinaryField('IsAdmin')


class ProvisionOfOtherServices(models.Model):
    typeofservice = models.CharField('type of place', max_length=50)
    priceoftheservice = models.PositiveIntegerField('priceoftheservice')
    accountnumber = models.PositiveIntegerField('accountnumber')


class TypeOfService(models.Model):
    id = models.AutoField(primary_key=True)
    NameOfTheServicetype = models.CharField('type of place', max_length=50)
    CurrentCostOfTheService = models.PositiveIntegerField('priceoftheservice')


class Places(models.Model):
    id = models.AutoField(primary_key=True)
    typeofplace = models.CharField('type of place', max_length=50)


class TypeOfPlaces(models.Model):
    id = models.AutoField(primary_key=True)
    price = models.PositiveIntegerField('price')
    nametypeofplace = models.CharField('name type of place', max_length=50)


class TypeOfRooms(models.Model):
    id = models.AutoField(primary_key=True)
    price = models.PositiveIntegerField('price')
    nametypeofroom = models.CharField('name type of room', max_length=50)


class Room(models.Model):
    id = models.AutoField(primary_key=True)
    typeofrooms = models.CharField('type of rooms', max_length=50)
    numberofseats = models.PositiveIntegerField('number of seats')
    numberofrooms = models.PositiveIntegerField('number of rooms')







