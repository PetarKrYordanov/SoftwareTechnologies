package Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfIncreasingElements {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);

        int[] inputNumbers = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int start = 0;
        int length = 1;
        int bestStart = -1;
        int bestLength = -1;

        for (int i = 1; i < inputNumbers.length; i++) {

            if (inputNumbers[i] > inputNumbers[i - 1]) {
                length += 1;
            }
            else {
                start = i;
                length = 1;
            }

            if (length>bestLength){
                bestLength= length;
                bestStart = start;
            }
        }

        for (int i = bestStart; i <bestStart+bestLength; i++) {
            System.out.print(inputNumbers[i] + " ");
        }
    }
}