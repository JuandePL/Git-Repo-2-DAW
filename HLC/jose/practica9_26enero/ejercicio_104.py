# Diseña un programa que calcule https://i.vgy.me/MaEBWI.png
# donde n y m son números enteros que deberá introducir el usuario por teclado.

n = int(input("Introduce el numero n: "))
m = int(input("Introduce el numero m: "))

# Bucle para sumatorio
suma = sum(x for x in range(n, m+1))

print(suma)