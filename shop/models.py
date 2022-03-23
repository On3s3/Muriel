from pickle import OBJ
from re import UNICODE
from django.db import models
from django.db.models import Model
from django.utils import timezone

class type(models.Model):
      type_title=models.CharField(max_length=50)
      type_description=models.TextField(blank=True, null=True)
      
      class Meta:
            ordering=["type_title"]

      def __str__(self):
            return self.type_title
            

                
class shopping(models.Model):
      
      articles_title=models.CharField(max_length=50)
      articles_description=models.TextField(blank=True, null=True)
      articles_price=models.DecimalField(max_digits=5, decimal_places=2, default=0)
      articles_type=models.ForeignKey(type, on_delete=models.CASCADE)
      # image=models.ImageField(null=True, upload_to='images/', height_field=25, width_field=100, max_length=255)

      class Meta:
            ordering=["articles_type"]

      def __str__(self):
            return self.articles_title
      
class gift(models.Model):
      gift_title=models.CharField(max_length=50)
      gift_price=models.PositiveIntegerField()

      class Meta:
            ordering=["gift_title"]

      def __str__(self):
            return self.gift_title



class appointment(models.Model):
      LOAN_motive=(
            ( 'p', 'Pedicure'),
            ('m', 'Manicure'),
            ( 'o', 'Onglerie'),
            ( 's', 'Soins'),
            ( 'a', 'Achat'),
            ( 'au', 'Autres'),
      )
      motive=models.CharField(max_length=75, choices=LOAN_motive, default='Achat')
      date_app=models.DateField()
      time_app=models.TimeField()

      class Meta:
            ordering=["date_app"]

      def __str__(self):
            return self.motive



class user(models.Model):
      name=models.CharField(max_length=100)
      last_name=models.CharField(max_length=100)

      LOAN_sexe=(
            ( 'M', 'Masculin'),
            ( 'F', 'Feminin'),
      )
      sexe=models.CharField(max_length=1, choices=LOAN_sexe, default='F')
      phone=models.CharField(max_length=20) 
      adresse=models.CharField(max_length=75)

      class Meta:
            ordering=["name"]

      def __str__(self):
            return self.name