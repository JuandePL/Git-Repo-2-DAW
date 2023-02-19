# 288. En un programa que estamos diseñando preguntamos al usuario numerosas cuestiones
# que requieren una respuesta afirmativa o negativa. Diseña una función llamada sí_o_no que
# reciba una cadena (la pregunta). Dicha cadena se mostrará por pantalla y se solicitará al
# usuario que responda. Solo aceptaremos como respuestas válidas
# 'si', 's', 'Sí', 'SÍ', 'no', 'n', 'No', 'NO'
# las cuatro primeras para respuestas afirmativas y las cuatro últimas para
# respuestas negativas. Cada vez que el usuario se equivoque, en pantalla aparecerá un mensaje
# que le recuerde las respuestas aceptables. La función devolverá True si la respuesta es afirmativa,
# y False en caso contrario.

import random


def llamaSioNo(respuesta):
    # Lista de respuestas validas
    positivo = ['si', 's', 'Sí', 'SÍ']
    negativo = ['no', 'n', 'No', 'NO']

    # True si es positiva, False si es negativa y None si no es ninguna de las dos
    return True if respuesta in positivo else False if respuesta in negativo else None


# ----- Programa -----
respuestaCorrecta = True
preguntas = ['¿Te gusta el programa?',
             '¿Eres del Betis?', '¿Es esto una pregunta?']

while respuestaCorrecta:
    respuesta = input(f'{preguntas[random.randint(0, len(preguntas) - 1)]}: ')

    if llamaSioNo(respuesta) == None:
        respuestaCorrecta = False

print('Saliste del programa.')
