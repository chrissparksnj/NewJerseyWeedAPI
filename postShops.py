import requests
import csv




def postData(blob):
    url = "http://147.182.247.193/endpoints/addShop"
    r = requests.post(url, data=blob)
    print(r.text)





def main():
    with open("weed.csv", newline='') as csvfile:
        spamreader = csv.reader(csvfile, delimiter=',', quotechar='|')
        for row in spamreader:
            try:
                name = row[0]
                town = row[1]
                url = row[2]
                phone = row[3]
                address = row[4]
                blob = {"website": url, "store_name":name, "url":url, "phone":phone, "address": address}
                postData(blob)
            except:
                pass

    
                




if __name__ == "__main__":
    main()