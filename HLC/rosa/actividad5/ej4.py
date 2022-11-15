# 4.- Realiza una función que pida dos números al usuario y
# devuelva el producto de dichos números.

def getProducto(num1, num2):
    return num1 * num2


print("Bienvenido al programa, aquí podrás calcular el producto de dos números.")
num1 = int(input("Introduce el primer numero: "))
num2 = int(input("Introduce el segundo numero: "))

print(f'\nEl producto de {num1} y {num2} es igual a {getProducto(num1, num2)}')
