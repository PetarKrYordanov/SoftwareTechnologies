package Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class MaxSequenceOfEqualElements {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);

        int[] sequence = Arrays.stream(scanner.nextLine().split(" "))
                .mapToInt(Integer::parseInt)
                .toArray();

        int start = 0;
        int length = 1;
        int bestStart = -1;
        int bestLength = -1;

        for (int i = 1; i < sequence.length; i++) {

            if (sequence[i] == sequence[i - 1]) {
                length += 1;
            } else {
                start = i;
                length=1;
            }
            if ( bestLength<length){
                bestLength = length;
                bestStart = start;
            }
        }
        for (int i = bestStart; i<bestLength+bestStart; i++){
            System.out.print(sequence[i] + " ");
        }

    }
}
