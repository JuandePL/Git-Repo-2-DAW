# Escribir un programa para una empresa que tiene salas de juegos para
# todas las edades y quiere calcular de forma automática el precio que debe
# cobrar a sus clientes por entrar. El programa debe preguntar al usuario la
# edad del cliente y mostrar el precio de la entrada. Si el cliente es menor de
# 4 años puede entrar gratis, si tiene entre 4 y 18 años debe pagar 5€ y si es
# mayor de 18 años, 10€.

age = int(input("Buenas, introduce tu edad: "))

if age < 4:
    print("La entrada es gratuita.")
elif age < 18:
    print("La entrada sale a 5€.")
else:
    print("La entrada sale a 10€.")
