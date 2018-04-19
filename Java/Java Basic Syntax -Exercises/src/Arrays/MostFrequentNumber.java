package Arrays;

import java.util.Arrays;
import java.util.Scanner;

public class MostFrequentNumber {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        int[] inputNumbers = Arrays.stream(scanner.nextLine().split("\\s+"))
                .map(Integer::parseInt).mapToInt(Integer::intValue)
                .toArray();

        int count = 1;
        int bestCount = -1;
        int resultNum = inputNumbers[0];
        int bestStart = 10000;

        for (int i = 0; i < inputNumbers.length; i++) {
            count =1;
            for (int j = i +1; j < inputNumbers.length; j++) {
                if (inputNumbers[i]== inputNumbers[j]){

                    count+=1;

                }
                if (count>bestCount && bestStart>i){
                    resultNum = inputNumbers[i];
                    bestStart = i;

                }
            }
        }
        System.out.println(resultNum);

    }
}
