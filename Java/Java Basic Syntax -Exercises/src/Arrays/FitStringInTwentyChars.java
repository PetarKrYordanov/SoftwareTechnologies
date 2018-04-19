package Arrays;

import java.util.Scanner;

public class FitStringInTwentyChars {
    public static void main(String[] args) {

        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();
        StringBuilder result = new StringBuilder();

        for (int i = 0; i < 20; i++) {
            if (i>input.length()-1){
                result.append('*');
            }else {
                result.append(input.charAt(i));
            }
        }
        System.out.println(result);
    }
}
