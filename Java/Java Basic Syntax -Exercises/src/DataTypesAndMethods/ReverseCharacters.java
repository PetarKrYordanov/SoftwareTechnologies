package DataTypesAndMethods;

        import java.util.ArrayList;
        import java.util.Scanner;

public class ReverseCharacters {
    public static void main(String[] args) {
        Scanner sc = new Scanner(System.in);
        ArrayList<String> input = new ArrayList<>();
        for (int i = 0; i < 3; i++) {
            input.add(sc.next());
        }

        System.out.println(input.get(2)+input.get(1)+input.get(0));
    }
}
