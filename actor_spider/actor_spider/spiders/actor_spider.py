import scrapy
from scrapy.selector import Selector
from scrapy.item import Item, Field


class ActorItem(Item):
    url = Field()
    tag = Field()
    name = Field()
    description = Field()

class ActorSpider(scrapy.Spider):
    name = "actor_spider"
    category = "actor"
    start_urls = []
    page = 10
    id = 0
    base_url = "http://www.imdb.com/list/ls058011111/?page={0}"
    def __init__(self):
        for i in range(self.page):
            self.start_urls.append(self.base_url.format(i + 1))

    def parse(self, response):
        results = Selector(response).xpath('//*[@id="main"]/div/div[2]/div[3]/div')
        for actor in results:
            item = ActorItem()
            item['name'] = actor.xpath('normalize-space(div[2]/h3/a)').extract_first()
            item['url'] = actor.xpath('div[1]/a/img/@src').extract_first()
            self.id = self.id + 1
            tag = self.category + "-" + str(self.id)
            item['tag'] = tag
            item['description'] = actor.xpath('normalize-space(div[2]/p[2])').extract_first()
            yield item

