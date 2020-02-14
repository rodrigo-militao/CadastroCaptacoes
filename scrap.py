import requests
import bs4 as bs
import json
from selenium import webdriver
from selenium.webdriver.chrome.options import Options

option = Options()
option.headless = True
driver = webdriver.Chrome("/usr/local/bin/chromedriver", options=option)

url = "https://pe.olx.com.br/grande-recife/imoveis/excelente-apartamento-na-imbiribeira-717961969"

driver.get(url)

element = driver.find_element_by_xpath('//*[@id="content"]/div[2]/div/div[2]/div[1]')
htmlcode = element.get_attribute('outerHTML')


soup = bs.BeautifulSoup(htmlcode,'html.parser')

title = soup.find('h1')
#imgs = soup.find_all('img', limit=20)
#desc = soup.find('p')
otherinfos = soup.find_all('dd') #Not working yet
price = soup.find('h2')
tipo = driver.find_element_by_xpath('//*[@id="content"]/div[2]/div/div[2]/div[1]/div[21]/div/div[2]/div[2]/div/a')

for cep in otherinfos:
    if len(cep.get_text()) == 8: 
        cep = cep
        break

info = {
    "title": title.text,
    "cep": cep.text,
    "price": price.text,
    "tipo": tipo.text
}

print(info)

driver.quit()

with open('imoveis.json', 'w') as fp:
    json.dump(info, fp, ensure_ascii=False)