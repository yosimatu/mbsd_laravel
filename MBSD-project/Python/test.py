import sys

# コマンドライン引数を受け取る
args = sys.argv

# python3 test.py a b
# print(args[0])
# → a
# print(args[1])
# → b

def main():
    print(args[0])
    for i in range(10):
        print(str(i + 1) + 'test')



if __name__ == "__main__":
    main()