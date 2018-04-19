package Arrays;

import java.util.Arrays;
import java.util.List;
import java.util.Scanner;
import java.util.stream.Collectors;

public class BombNumbers {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        List<Integer> inputNumbers = Arrays
                .stream(scanner.nextLine().split("\\s"))
                .map(Integer::parseInt).collect(Collectors.toList());

        int[] inputArgs = Arrays
                .stream(scanner.nextLine().split("\\s"))
                .mapToInt(Integer::parseInt).toArray();

        int searchedNumber = inputArgs[0];
        int bombRange = inputArgs[1];

        while (inputNumbers.indexOf(searchedNumber) > -1) {

            int position = inputNumbers.indexOf(searchedNumber);
            int startPosition = Math.max(position-bombRange,0);
            int endPosition = Math.min(position+bombRange,inputNumbers.size()-1);

            inputNumbers.subList(startPosition, endPosition+1).clear();
        }
        int sum = inputNumbers.stream().mapToInt(i->i).sum();
        System.out.println(sum);

    }
}
