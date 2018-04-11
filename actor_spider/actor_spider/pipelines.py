# -*- coding: utf-8 -*-

# Define your item pipelines here
#
# Don't forget to add your pipeline to the ITEM_PIPELINES setting
# See: https://doc.scrapy.org/en/latest/topics/item-pipeline.html

import urllib.request
import os
import MySQLdb
from sqlalchemy import create_engine, MetaData, Table, Column, String, Integer, ForeignKey
from sqlalchemy.ext.declarative import declarative_base
from sqlalchemy.orm import sessionmaker

Base = declarative_base()

class Actor(Base):
    __tablename__ = "actor"
    id = Column(Integer, primary_key=True)
    name = Column(String)
    description = Column(String)
    tag = Column(String)
    avatar = Column(String)
    def __init__(self, name, description, tag, avatar):
        self.name = name
        self.description = description
        self.tag = tag
        self.avatar = avatar

class DataSave:
    path = "/home/vagrant/data2"

    def __init__(self, tag, name, description, url):
        self.tag = tag
        self.name = name
        self.description = description
        self.url = url

        if not os.path.exists(self.path):
            os.makedirs(self.path)
        filename = os.path.join(self.path, self.tag)
        ext = self.url[self.url.rfind("."):]
        filename = filename + ext

        self.avatar = filename

    def save_image(self):
        print ("avatar = " + self.avatar)
        if not os.path.exists(self.avatar):
            print("Downloading into {0}".format(self.avatar))
            urllib.request.urlretrieve(self.url, self.avatar)

    # def save_db(self):
    #     print("avatar = " + self.description)
    #     db = MySQLdb.connect(host="localhost", user="root", passwd="123", db="actor_spider")
    #     c = db.cursor()
    #     c.execute("""INSERT INTO actor (name, description, tag, avatar) VALUES
    #                               (%s,%s,%s,%s)""", (self.name, self.description, self.tag, self.avatar))
    #     db.commit()
    #     print ("save db successfully!")
    #     db.close()

    def save_db(self):
        db = create_engine("mysql://root:123@localhost:3306/actor_spider")
        print(db.table_names())
        Session = sessionmaker(bind=db)
        session = Session()
        actor = Actor(name=self.name, description=self.description, tag=self.tag, avatar=self.avatar)
        session.add(actor)
        session.commit()

class ActorSpiderPipeline(object):

    def open_spider(self, spider):
        print("I will crawl data")

    def close_spider(self, spider):
        print("Done crawl!!!")

    def process_item(self, item, spider):
        data = DataSave(item['tag'], item['name'], item['description'], item['url'])
        data.save_image()
        data.save_db()
        return item
