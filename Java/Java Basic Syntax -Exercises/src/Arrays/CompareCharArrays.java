package Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class CompareCharArrays {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        char[] arrayOne = scanner.nextLine()
               .replaceAll(" ","")
                .toCharArray();

        char[] arrayTwo = scanner.nextLine()
                .replaceAll(" ", "")
                .toCharArray();

        int index = 0;
        int min = Math.min(arrayOne.length, arrayTwo.length);

        while (min-- > 0) {
            if (arrayOne[index] == arrayTwo[index]){
                index++;
                continue;
            }else {
                if (arrayOne[index]<arrayTwo[index]){
                    System.out.println(arrayOne);
                    System.out.println(arrayTwo);
                }else {
                    System.out.println(arrayTwo);
                    System.out.println(arrayOne);
                }
                return;
            }
        }
        if (min == arrayOne.length){
            System.out.println(arrayOne);
            System.out.println(arrayTwo);
        }else {
            System.out.println(arrayTwo);
            System.out.println(arrayOne);
        }

    }
}
