package Arrays;


import java.util.Arrays;
import java.util.Scanner;

public class IndexOfLetters {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        char[] inputArray = scanner.nextLine().toCharArray();

        for (int i = 0; i < inputArray.length; i++) {
            int currentChar = inputArray[i] -'a';
            System.out.printf("%c -> %d\n",inputArray[i],currentChar);
        }
    }
}
