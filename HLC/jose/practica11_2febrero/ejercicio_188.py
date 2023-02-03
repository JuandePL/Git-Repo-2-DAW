# 188. Una de las técnicas de criptografía más rudimentarias consiste en sustituir cada uno
# de los caracteres por otro situado n posiciones más a la derecha en el abecedario. Si n = 2,
# por ejemplo, sustituiremos la «a» por la «c», la «b» por la «d», y así sucesivamente. El problema
# que aparece en las últimas n letras del alfabeto tiene fácil solución: en el ejemplo, la letra
# «y» se sustituirá por la «a» y la letra «z» por la «b». La sustitución debe aplicarse a las letras
# minúsculas y mayúsculas y a los dígitos (el «0» se sustituye por el «2», el «1» por el «3» y así
# hasta llegar al «8», que se sustituye por el «0», y el «9», que se sustituye por el «1»).
# Diseña un programa que lea un texto y el valor de n y muestre su versión criptografiada.

# Importar alfabeto y digitos
from string import ascii_lowercase, ascii_uppercase
digits = ['0', '1', '2', '3', '4', '5', '6', '7', '8', '9']


def obtenerCaracterEncriptado(caracter, array, posiciones):
    # Obtener siguiente index
    siguienteIndex = array.index(caracter) + posiciones

    # Si el index se pasa de la longitud del array, volvemos al inicio
    if (array.index(caracter) + posiciones) >= len(array):
        siguienteIndex = abs(len(array) - (array.index(caracter) + posiciones))

    return array[siguienteIndex]


cadena = input("Introduce una frase: ")
n = int(input("Introduce cuántas posiciones a la derecha se van a mover los caractéres: "))

for caracter in cadena:
    # Si es un espacio, lo ignoramos
    if caracter == " ":
        print(" ", end="")
        continue

    # Comprobar si es un numero, una minuscula o una mayuscula
    if caracter in digits:
        print(obtenerCaracterEncriptado(caracter, digits, n), end="")
    elif caracter in ascii_lowercase:
        print(obtenerCaracterEncriptado(caracter, ascii_lowercase, n), end="")
    elif caracter in ascii_uppercase:
        print(obtenerCaracterEncriptado(caracter, ascii_uppercase, n), end="")