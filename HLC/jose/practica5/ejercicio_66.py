# 66. Un capital de C euros a un interés del x por cien anual durante n años se convierte
# en C · (1 + x/100)n euros. Diseña un programa Python que solicite la cantidad C, el interés x y
# el número de años n y calcule el capital final solo si x es una cantidad positiva.

c = int(input("Introduce la cantidad C: "))
x = int(input("Introduce el interes X: "))
n = int(input("Introduce el numero de años n: "))

if (x > 0):
    print(f'El capital final es de {c * (1+x/100)**n}€')
else:
    print("El interés no es positivo.")