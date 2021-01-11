from django.contrib import admin


# Register your models here.
from .models import Booking
from .models import Theclient
from .models import ProvisionOfOtherServices
from .models import Users
from .models import TypeOfService
from .models import Places
from .models import TypeOfPlaces
from .models import TypeOfRooms
from .models import Bookinginvoice
from .models import Room
admin.site.register(Booking)
admin.site.register(Theclient)
admin.site.register(Bookinginvoice)
admin.site.register(Users)
admin.site.register(ProvisionOfOtherServices)
admin.site.register(TypeOfService)
admin.site.register(Places)
admin.site.register(TypeOfPlaces)
admin.site.register(TypeOfRooms)
admin.site.register(Room)


def make_published(request, queryset):
    queryset.update(status='p')
    make_published.short_description = "Mark selected stories as published"


class ArticleAdmin(admin.ModelAdmin):
    list_display = ['title', 'status']
    ordering = ['title']
    actions = [make_published]

