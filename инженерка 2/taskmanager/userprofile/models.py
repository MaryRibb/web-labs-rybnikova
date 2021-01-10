from django.db import models

# Create your models here.
# -*- coding:utf-8 -*-
from django.db import models
from django.contrib.auth.models import User


class UserProfile(models.Model):
    user = models.OneToOneField(User, on_delete=models.CASCADE)
    avatar = models.ImageField(upload_to='images/users', verbose_name='Изображение')

    def __unicode__(self):
        return self.user

    class Meta:
        verbose_name = 'Профиль'
        verbose_name_plural = 'Профили'
