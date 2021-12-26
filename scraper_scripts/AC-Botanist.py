import requests
from bs4 import BeautifulSoup
from requests_html import HTMLSession


def postData(blob):
    url = "http://147.182.247.193/endpoints/addstrain"
    r = requests.post(url, data=blob)
    print(r.text)


def filterTHCNulls(nullOrNot):
    if "view details" in nullOrNot:
        return "THC Content not available"
    else:
        return nullOrNot

def extractCardData(html):
    s = BeautifulSoup(html, 'html.parser')
    c = {
        "secondary":"text-secondary text-xs leading-none mb-xs",
        "name":"font-bold text-sm break-words",
        "thcContent":"mr-sm",
        "weight":"font-bold text-xs mt-sm",
        "price":"font-bold text-lg"
        
        }
    secondaryText = s.find("div", {"class" : c['secondary']})
    name = s.find("h3", {"class": c['name']})
    thc = s.find("div", {"class": c['thcContent']})
    weight = s.find("div", {"class": c['weight']})
    price = s.find("div", {"class": c['price']})
    data_dict = {}
    data_dict['thc_level'] = filterTHCNulls(thc.get_text())
    data_dict['name'] = name.get_text()
    data_dict['type_of_flower'] = secondaryText.get_text()
    data_dict['weight'] = weight.get_text()
    data_dict['price'] = price.get_text()
    data_dict['location'] = "The Botanist in AC"
    postData(data_dict)





def main():
    url = "https://www.iheartjane.com/embed/stores/2094/menu?refinementList%5Broot_types%5D%5B0%5D=flower"
    session = HTMLSession(browser_args=["--no-sandbox", "--user-agent='Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/51.0.2704.103 Safari/537.36'"])
    r = session.get(url)
    r.html.render(wait=5)
    print(r.html.raw_html)
    
    
##    
##    for i in range(1, 6):
##        
##        sewp = BeautifulSoup(r., 'html.parser')
##        
##        md = sewp.find_all("div")
##        
##        print(md)
        


if __name__ == "__main__":
    main()


