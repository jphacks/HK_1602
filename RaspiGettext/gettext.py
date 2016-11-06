#!/usr/bin/python                                                              
#coding:utf-8                                                                   
from goolabs import GoolabsAPI
import base64
import json
from requests import Request, Session
from prettyprint import pp
import MySQLdb #DB読み込み
import sys, codecs

def recognize_captcha(str_image_path):
        bin_captcha = open(str_image_path, 'rb').read()

        str_encode_file = base64.b64encode(bin_captcha)

        str_url = "https://vision.googleapis.com/v1/images:annotate?key="

        str_api_key = "AIzaSyCcIrnAmglusWoktBLEtAREhq_lkxhyheg"

        str_headers = {'Content-Type': 'application/json'}

        str_json_data = {
            'requests': [
                {
                    'image': {
                        'content': str_encode_file
                    },
                    'features': [
                        {
                            'type': "TEXT_DETECTION",
                            'maxResults': 10
                        }
                    ]
                }
            ]
        }

        print("begin request")
        obj_session = Session()
        obj_request = Request("POST",
                              str_url + str_api_key,
                              data=json.dumps(str_json_data),
                              headers=str_headers
                              )
        obj_prepped = obj_session.prepare_request(obj_request)
        obj_response = obj_session.send(obj_prepped,
                                        verify=True,
                                        timeout=60
                                        )
        print("end request")

        if obj_response.status_code == 200:
            print obj_response.text
            with open('data.json', 'w') as outfile:
                json.dump(obj_response.text, outfile)
                return obj_response.text
        else:
            return "error"

if __name__ == '__main__':
  recognize_captcha("jpn.jpg")

f = open('data.json','r')

jsonData = json.load(f)

a=json.dumps(jsonData, sort_keys = True,ensure_ascii=False,indent = 1)

a2=json.loads(jsonData)

pp(a2)
print type(a2)

tex= a2["responses"][0]["textAnnotations"][0]["description"]

""" データベースに接続する"""
connector = MySQLdb.connect(unix_socket="/Applications/MAMP/tmp/mysql/mysql.soc\
k",host="localhost",db="Wordrop", user="root", passwd="root", charset="utf8")

cur = connector.cursor()

cur.execute("select * from home;")


app_id = "2d84d0d734ebefeb1f4dcf8ae106ec9d2f3b72a5be084a1014d6e27a9002ffef"
api = GoolabsAPI(app_id)

response = api.morph(pos_filter="名詞",sentence=tex)#sentenceにある言葉を形態素解析する        
value=response["word_list"]#形態素解析の結果を代入                             \
                                                                                

response = api.entity(sentence=value)#名詞の固有表現を求める                   \
                                                                                

list = response.values()

pp(value)

response = api.entity(sentence=value[0][0][0])

print type(value)

ss=[]
count=0

for v in value[0]:
    pp(value[0][count][0])
    response = api.entity(sentence=value[0][count][0])
    pp(response)
    list=response.values()
    try:#例外処理                                                               
        if(list[0][0][1]=='ART'):ss.append("1")
        elif list[0][0][1]=='LOC':ss.append("2")
        elif list[0][0][1]=='PSN':ss.append("3")
        else:ss.append("0")
    except:
        ss.append("0")
    sql = "insert into home values(%s, %s,%s,%s)"
    cur.execute(sql,(' ',value[0][count][0],ss[count],1))
    count+=1

connector.commit()

f.close()

