matriz = [
    [13383, 4, 7799],
    [99, 5, 6],
    [777777, 2, 1],
    [1999, 3, 5]
]
mayor = []
mayorOne = []
mayorSecond = []
for i in range(1, len(matriz)):
    for j in range(0, len(matriz)):
        if(matriz[i][0] < matriz[j][0]):
            mayor.append(matriz[j][0])
        if(matriz[i][1] < matriz[j][1]):
            mayorOne.insert(matriz[j][1])
        if(matriz[i][2] < matriz[j][2]):
            mayorSecond.append(matriz[j][2])
            
print('number big of first column ->', mayor[0])
print('number big of second column ->', mayorOne[0])
print('number big of Third column ->', mayorSecond[0])
