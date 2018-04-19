package DataTypesAndMethods;

        import java.util.Scanner;

public class VowerOrDigit {
    public static void main(String[] args) {
        Scanner scanner = new Scanner(System.in);
        String inputChar = scanner.nextLine().toLowerCase();

        if ( inputChar.equals("a") || inputChar.equals("i") || inputChar.equals("e") ||
                inputChar.equals("u") || inputChar.equals("o")){
            System.out.println("vowel");
        }else if (inputChar.matches("\\d")){
            System.out.println("digit");
        }else {
            System.out.println("other");
        }
    }
}
