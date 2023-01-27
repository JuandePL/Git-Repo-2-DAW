# Modifica el programa anterior para que si n > m, el programa no efectúe ningún
# cálculo y muestre por pantalla un mensaje que diga que n debe ser menor o igual que m.

# Bucle infinito emulando a un bucle do-while
while True:
    n = int(input("Introduce el numero n: "))
    m = int(input("Introduce el numero m: "))

    # Si n es mayor, no calcules y pide los numeros de nuevo
    if n > m:
        print("El numero n no puede ser mayor que el numero m")
    else:
        # Si los numeros son correctos, calcula y sal del bucle
        suma = sum(x for x in range(n, m+1))
        print(suma)
        break