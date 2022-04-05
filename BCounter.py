import sys

if len(sys.argv) != 2 :
    print("Usage :\n\t"+ sys.argv[0] + " <bytes>")
    exit()


def size(BytesInput):
    sizes = {
    'KB':1024,
    'MB':1024 * 1024,
    'GB':1024 * 1024 * 1024,
    'TB':1024 * 1024 * 1024 * 1024
    }
    if BytesInput == 0:
        print("[+] 0 bytes always be 0 bytes")
    elif BytesInput < sizes['KB']:
        return f"[+] {BytesInput} bytes"

    elif BytesInput < sizes['MB']:
        val = BytesInput / sizes['KB']
        return "[+] {:.2f}".format(val) +  " KB"

    elif BytesInput < sizes['GB']:
        val = BytesInput / sizes['MB']
        return "[+] {:.2f}".format(val) +  " MB"


    elif BytesInput < sizes['TB']:
        val = BytesInput / sizes['GB']
        return "[+] {:.2f}".format(val) +  " GB"

    else:
        val = BytesInput / sizes['TB']
        return "[+] {:.2f}".format(val) +  " TB"

print(size(int(sys.argv[1])))
