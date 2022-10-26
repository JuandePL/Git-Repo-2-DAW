# Devuelve el dni completo con su letra correspondiente
def calcularDniCompleto(numero):
    letrasDni = ["T", "R", "W", "A", "G", "M", "Y", "F", "P", "D", "X",
                 "B", "N", "J", "Z", "S", "Q", "V", "H", "L", "C", "K", "E"]
    return f'{numero}{letrasDni[numero%23]}'


numero = int(input('Introduce tu numero del DNI (sin letra): '))
print(f'Tu DNI completo es el {calcularDniCompleto(numero)}')
