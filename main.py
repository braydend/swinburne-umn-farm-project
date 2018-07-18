import random

def printkek(kekcount):
    print('kek')
    return kekcount + 1

def main():
    kekcount = 0
    for i in range(0,random.randrange(40)):
        kekcount = printkek(kekcount)
    print('kekcount: ' + str(kekcount))

if __name__ == '__main__':
    main()