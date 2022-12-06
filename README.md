# TIL
#include <iostream>
using namespace std;

class CAR{
private:
    int num;
    double gas;
public:
    void Show();
    void SetNumGas(int n, double g);
};

void CAR::Show()
{
    cout <<"차량 연료는" << num << "입니다. \n";
    cout<< "연료량은" << gas << "입니다. \n";
}
void CAR::SetNumGas(int n, double g){
    if (g > 0 && g < 1000)
    {
        num = n;
        gas = g;
        cout <<"차량 번호를" << num << "으로 연료량을" << gas << "으로 바꾸었습니다. \n";
    }
    else
    {
        cout << g << "는 올바른 연료량이 아닙니다 \n";
        cout << "연료량을 바꿀 수 없습니다. \n";
    }
}

int main()
{
    CAR car1;
    car1.SetNumGas(1234, 20.5);
    car1.Show();
    cout << "잘못된 연료량(-10, 0)을 저장해 보자.... \n";
    car1.SetNumGas(1234, -10.0);
    car1.Show();
    
    return 0;
}