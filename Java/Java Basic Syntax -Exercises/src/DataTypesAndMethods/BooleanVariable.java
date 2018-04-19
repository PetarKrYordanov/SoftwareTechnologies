package DataTypesAndMethods;

import java.util.Scanner;

public class BooleanVariable {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String input = scanner.nextLine();
      Boolean b = Boolean.valueOf(input);
        if (input.toLowerCase().equals("true")){
            System.out.println("Yes");
        }else  {
            System.out.println("No");
        }
    }
}
