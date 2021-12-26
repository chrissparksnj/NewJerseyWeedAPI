import requests
from bs4 import BeautifulSoup


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
    try:
        data_dict['thc_level'] = filterTHCNulls(thc.get_text())
    except:
        data_dict['thc_level'] = "Information not available."
    data_dict['name'] = name.get_text()
    data_dict['type_of_flower'] = secondaryText.get_text()
    data_dict['weight'] = weight.get_text()
    data_dict['price'] = price.get_text()
    data_dict['location'] = "Zen Leaf - Neptune"
    postData(data_dict)






def main():
    for i in range(1, 5):
        print(i)
        url = "https://www.leafly.com/dispensary-info/zen-leaf-neptune/menu?product_category[]=Flower&page=" + str(i)
        print(url)
        j = requests.get(url)
        sewp = BeautifulSoup(j.text, 'html.parser')
        cards = sewp.find_all("div", {"class":"col-1/2 lg:col-1/3 mb-md"})
        for k in cards:
            extractCardData(str(k))
if __name__ == "__main__":
    main()


