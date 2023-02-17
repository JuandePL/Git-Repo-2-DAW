# 247. Una matriz cuadrada es triangular superior si todos los elementos por debajo de la
# diagonal principal son nulos. Por ejemplo, esta matriz es triangular superior:
# A = [[1, 2, 3],
#      [0, 12, 6],
#      [0, 0, -3]
#      ]
# Diseña un programa que diga si una matriz es o no es triangular superior.

def esTriangularSuperior(matriz):
    esSuperior = True
    lenMatriz = len(matriz) - 1

    if matriz[lenMatriz - 1][0] != 0:
        esSuperior = False

    if matriz[lenMatriz][0] != 0:
        esSuperior = False

    if matriz[lenMatriz][1] != 0:
        esSuperior = False

    print(f'La matriz es triangular superior' if esSuperior else 'La matriz NO es triangular superior')


matrizA = [[1, 2, 3],
           [0, 12, 6],
           [0, 0, -3]
           ]

esTriangularSuperior(matrizA)

matrizA = [[1, 2, 3],
           [0, 12, 6],
           [5, 0, -3]
           ]

esTriangularSuperior(matrizA)
