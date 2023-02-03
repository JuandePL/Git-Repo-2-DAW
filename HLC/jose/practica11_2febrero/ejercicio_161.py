# 161. Escribe un programa que lea una cadena y un número entero k y muestre el mensaje "hay palabras largas"
# si alguna de las palabras de la cadena es de longitud mayor o igual que k, y "hay palabras cortas" en caso contrario.

cadena = input("Introduce una frase: ")
k = int(input("Introduce un número entero: "))

hayPalabrasLargas = False

# Separar palabras en una lista y recorrerlas y comprobar su longitud
for palabra in cadena.split():
    if len(palabra) >= k:
        hayPalabrasLargas = True
        break

# Operador ternario para imprimir resultado
print("Hay palabras largas" if hayPalabrasLargas else "Hay palabras cortas")