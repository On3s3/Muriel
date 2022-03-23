from django.contrib import admin

from shop.models import user, shopping, type, appointment, gift

admin.site.register(appointment)
admin.site.register(shopping)
admin.site.register(type)
admin.site.register(user)
admin.site.register(gift)
